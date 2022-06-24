<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->session->flashdata('message'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h class="m-0 font-weight-bold text-primary"><?= $title ?></h>
            <a href="" class="btn btn-outline-primary btn-sm float-right waves-effect" data-toggle="modal" data-target="#newSurveiModal"> <i class="fas fa-fw fa-plus"></i> Survei Management</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Answer</th>
                            <th>Answer</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($survei as $su) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $su['layanan']; ?></td>
                                <td><?= $su['pertanyaan']; ?></td>
                                <td><?= $su['isi1']; ?></td>
                                <td><?= $su['isi2']; ?></td>
                                <td><?= $su['isi3']; ?></td>
                                <td><?= $su['isi4']; ?></td>
                                <td>
                                    <a href="" type="button" class="btn btn-outline-success waves-effect btn-sm" data-toggle="modal" data-target="#editSurveiModal<?= $su['id']; ?>"> <i class="fas fa-fw fa-pen"></i></class=></a>
                                    <a href="<?= base_url(); ?>admin/deletemanage/<?= $su['id']; ?>" type="button" class="btn btn-outline-danger waves-effect btn-sm mt-1" onclick="return confirm ('yakin?'); "> <i class="fas fa-fw fa-trash-alt"></i></class=></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newSurveiModal" tabindex="-1" aria-labelledby="newSurveiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary" id="newSurveiModalLabel"> New Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/management'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="layanan" id="layanan" class="form-control">
                            <option value="">Select Service</option>
                            <?php foreach ($layanan as $la) : ?>
                                <option value="<?= $la['layanan']; ?>"><?= $la['layanan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Question" value="<?= set_value('pertanyaan'); ?>">
                        <?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi1" name="isi1" placeholder="Answer" value="<?= set_value('isi1'); ?>">
                        <?= form_error('isi1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi2" name="isi2" placeholder="Answer" value="<?= set_value('isi2'); ?>">
                        <?= form_error('isi2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi3" name="isi3" placeholder="Answer" value="<?= set_value('isi3'); ?>">
                        <?= form_error('isi3', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="isi4" name="isi4" placeholder="Answer" value="<?= set_value('isi4'); ?>">
                        <?= form_error('isi4', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php $i = 1;
foreach ($survei as $su) : $i++; ?>
    <div class="modal fade" id="editSurveiModal<?= $su['id']; ?>" tabindex="-1" aria-labelledby="editSurveiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-primary" id="editSurveiModalLabel"> New Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/editmanage'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $su['id']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <select name="layanan" id="layanan" class="form-control">
                                <?php foreach ($layanan as $la) : ?>
                                    <option value="<?= $la['layanan']; ?>"><?= $la['layanan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Question" value="<?= set_value('pertanyaan'); ?>">
                            <?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="isi1" name="isi1" placeholder="Answer" value="<?= $su['isi1']; ?>">
                            <?= form_error('isi1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="isi2" name="isi2" placeholder="Answer" value="<?= $su['isi2']; ?>">
                            <?= form_error('isi2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="isi3" name="isi3" placeholder="Answer" value="<?= $su['isi3']; ?>">
                            <?= form_error('isi3', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="isi4" name="isi4" placeholder="Answer" value="<?= $su['isi4']; ?>">
                            <?= form_error('isi4', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>