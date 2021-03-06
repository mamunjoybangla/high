<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("inc/post-meta") ?>
<?php $this->load->view("admin/inc/pre-body") ?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-white">
            <div class="card-heading clearfix mb-3">
                <div class="modal fade" id="yearMod" tabindex="-1" role="dialog" aria-labelledby="yearModLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="yearModLabel">Create Academic Year</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Year</label>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                </div>
                                                <input maxlength="20" type="text" class="form-control" placeholder="Year" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Year Title</label>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                </div>
                                                <input maxlength="20" type="text" class="form-control" placeholder="Year Title" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Starting Date</label>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                </div>
                                                <input maxlength="20" type="text" class="form-control date-picker" placeholder="Starting Date" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-form-label">Ending Date</label>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                                </div>
                                                <input maxlength="20" type="text" class="form-control date-picker" placeholder="Ending Date" id="name" name="name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#yearMod"><i class="fas fa-plus"></i> Add New</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table datatables_init" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Year</th>
                                <th>Year Title</th>
                                <th>Starting Date</th>
                                <th>Ending Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>2019</td>
                                <td>2019/2020</td>
                                <td>03/09/2019</td>
                                <td>07/08/2020</td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>2020</td>
                                <td>2020/2021</td>
                                <td>03/09/2020</td>
                                <td>07/08/2021</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info" title="Approve" href="#"><i class="fas fa-check"></i></a> |
                                    <a class="btn btn-sm btn-outline-warning" title="Edit" href="#"><i class="fas fa-edit"></i></a> |
                                    <a class="btn btn-sm btn-outline-danger" title="Delete" href="#"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("inc/post-script") ?>