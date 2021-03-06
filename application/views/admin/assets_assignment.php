<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-sm btn-outline-primary" onclick="window.location='<?=base_url('admin/assets/assignment/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Asset</th>
                                <th>Assign Quantity</th>
                                <th>Role</th>
                                <th>Checkout To</th>
                                <th>Due Date</th>
                                <th>Checkout Date</th>
                                <th>Checkin Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>HP All In One</td>
                                <td>1</td>
                                <td>Accountant</td>
                                <td>Mr John</td>
                                <td>18 Mar 2020</td>
                                <td>02 Mar 2020</td>
                                <td>17 Mar 2020</td>
                                <td>Checked Out</td>
                                <td><a class="btn btn-sm btn-outline-info" title="View" href="<?=base_url("admin/assets/assignment/view")?>"><i class="fas fa-search"></i></a> | <a class="btn btn-sm btn-outline-warning" title="Edit" href="<?=base_url("admin/assets/assignment/edit")?>"><i class="fas fa-edit"></i></a> | <a class="btn btn-sm btn-outline-danger" title="Delete" href="<?=base_url("admin/assets/assignment/delete")?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script")?>