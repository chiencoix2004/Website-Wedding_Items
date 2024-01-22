<?php extract($data) ?>
<div class="container-fluid mt-3">
    <h1 class="h1">Danh sách liên hệ</h1>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">id_contact</th>
                <th scope="col">fullname</th>
                <th scope="col">phone_number</th>
                <th class="text-center" scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $items) :  ?>
            <tr>
                <td><?= $items['id_contact'] ?></td>
                <td><?= $items['fullname'] ?></td>
                <td><?= $items['phone_number'] ?></td>
                <td>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <span class="table-inner-text"><?= $items['contact_date'] ?></span>
                </td>
                <td class="text-center">
                    <span class="badge badge-light-success"><?= $items['status'] ?></span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>

