<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <button type="button" class="btn btn-outline-primary" onclick="window.location='<?=base_url('admin/marksdis/add')?>'"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Mark Distribution Type</th>
                                <th>Mark Value</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>C.A.</td>
                                <td>40</td>
                                <td><a class="btn btn-sm btn-outline-warning" href="<?=base_url("admin/marksdis/edit")?>">Edit</a> | <a class="btn btn-sm btn-outline-danger" href="<?=base_url("admin/marksdis/delete")?>">Delete</a></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Exam</td>
                                <td>60</td>
                                <td><a class="btn btn-sm btn-outline-warning" href="<?=base_url("admin/marksdis/edit")?>">Edit</a> | <a class="btn btn-sm btn-outline-danger" href="<?=base_url("admin/marksdis/delete")?>">Delete</a></td>
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