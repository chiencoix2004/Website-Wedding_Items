<?php 
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'global.php';


    include 'view/header.php';
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'dashboards-crm':
                include 'view/dashboards-crm.php';
                break;
            case 'app-ecommerce-dashboard':
                include 'view/app-ecommerce-dashboard.php';
                break;
            case 'app-logistics-dashboard':
                include 'view/app-logistics-dashboard.php';
                break;
            case 'app-academy-dashboard':
                include 'view/app-academy-dashboard.php';
                break;
            case 'app-ecommerce-product-list':
                include 'view/app-ecommerce-product-list.php';
                break;
            case 'app-ecommerce-product-add':
                include 'view/app-ecommerce-product-add.php';
                break;
            case 'app-ecommerce-category-list':
                
                include 'view/app-ecommerce-category-list.php';
                break;
            case 'app-ecommerce-order-list':
                include 'view/app-ecommerce-order-list.php';
                break;
            case 'app-ecommerce-order-details':
                include 'view/app-ecommerce-order-details.php';
                break;
            case 'app-ecommerce-customer-all':
                include 'view/app-ecommerce-customer-all.php';
                break;
            case 'app-ecommerce-customer-details-overview':
                include 'view/app-ecommerce-customer-details-overview.php';
                break;
            case 'app-ecommerce-customer-details-security':
                include 'view/app-ecommerce-customer-details-security.php';
                break;
            case 'app-ecommerce-customer-details-billing':
                include 'view/app-ecommerce-customer-details-billing.php';
                break;
            case 'app-ecommerce-customer-details-notifications':
                include 'view/app-ecommerce-customer-details-notifications.php';
                break;
            case 'app-email':
                include 'view/app-email.php';
                break;
            case 'app-chat':
                include 'view/app-chat.php';
                break;
            case 'app-calendar':
                include 'view/app-calendar.php';
                break;
            case 'app-kanban':
                include 'view/app-kanban.php';
                break;
            case 'app-ecommerce-manage-reviews':
                include 'view/app-ecommerce-manage-reviews.php';
                break;
            case 'app-ecommerce-referral':
                include 'view/app-ecommerce-referral.php';
                break;
            case 'app-ecommerce-settings-detail':
                include 'view/app-ecommerce-settings-detail.php';
                break;
            case 'app-ecommerce-settings-payments':
                include 'view/app-ecommerce-settings-payments.php';
                break;
            case 'app-ecommerce-settings-checkout':
                include 'view/app-ecommerce-settings-checkout.php';
                break;
            case 'app-ecommerce-settings-shipping':
                include 'view/app-ecommerce-settings-shipping.php';
                break;
            case 'app-ecommerce-settings-locations':
                include 'view/app-ecommerce-settings-locations.php';
                break;
            case 'app-ecommerce-settings-notifications':
                include 'view/app-ecommerce-settings-notifications.php';
                break;
            case 'app-academy-course':
                include 'view/app-academy-course.php';
                break;
            case 'app-academy-course-details':
                include 'view/app-academy-course-details.php';
                break;
            case 'app-logistics-fleet':
                include 'view/app-logistics-fleet.php';
                break;
            case 'app-invoice-list':
                include 'view/app-invoice-list.php';
                break;
            case 'app-invoice-preview':
                include 'view/app-invoice-preview.php';
                break;
            case 'app-invoice-edit':
                include 'view/app-invoice-edit.php';
            break;
            case 'app-invoice-add':
                include 'view/app-invoice-add.php';
                break;
            case 'app-user-list':
                include 'view/app-user-list.php';
                break;
            case 'app-user-view-account':
                include 'view/app-user-view-account.php';
                break;
            case 'app-user-view-security':
                include 'view/app-user-view-security.php';
                break;
            case 'app-user-view-billing':
                include 'view/app-user-view-billing.php';
                break;
            case 'app-user-view-notifications':
                include 'view/app-user-view-notifications.php';
                break;
            case 'app-user-view-connections':
                include 'view/app-user-view-connections.php';
                break;
            case 'app-access-roles':
                include 'view/app-access-roles.php';
                break;
            case 'app-access-permission':
                include 'view/app-access-permission.php';
                break;
            case 'pages-profile-user':
                include 'view/pages-profile-user.php';
                break;
            case 'pages-profile-teams':
                include 'view/pages-profile-teams.php';
                break;
            
            case 'pages-profile-projects':
                include 'view/pages-profile-projects.php';
                break;
            case 'pages-profile-connections':
                include 'view/pages-profile-connections.php';
                break;
            case 'pages-account-settings-account':
                include 'view/pages-account-settings-account.php';
                break;
            
            case 'pages-account-settings-security':
                include 'view/pages-account-settings-security.php';
                break;
            
            case 'pages-account-settings-billing':
                include 'view/pages-account-settings-billing.php';
                break;
            
            case 'pages-account-settings-notifications':
                include 'view/pages-account-settings-notifications.php';
                break;
            
            case 'pages-account-settings-connections':
                include 'view/pages-account-settings-connections.php';
                break;
            
            case 'pages-faq':
                include 'view/pages-faq.php';
                break;
            
            case 'pages-pricing':
                include 'view/pages-pricing.php';
                break;
            
            case '':
                include 'view/.php';
                break;
            
            case '':
                include 'view/.php';
                break;
            
            case '':
                include 'view/.php';
                break;
            
            
            default:
                include 'view/home.php';
                break;
        }
    }else{
        include 'view/home.php';
    }
    

    include 'view/footer.php';
