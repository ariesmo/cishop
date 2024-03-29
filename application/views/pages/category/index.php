<main role="main" class="container">
        <?php $this->load->view('layouts/_alert'); ?>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card mb-3">
                    <div class="card-header">
                        <span>Kategori</span>
                        <a href="<?= base_url('category/create');?>" class="btn btn-sm btn-secondary">Tambah</a>

                        <div class="float-right">
                            <?= form_open(base_url('category/search'), ['method' => 'POST']);?>
                                <div class="input-group">
                                    <input type="text" name="keyword" class="form-control form-control-sm text-center"
                                        placeholder="Cari" value="<?= $this->session->userdata('keyword');?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-info btn-sm" type="submit"><i
                                                class="fas fa-search"></i></button>
                                        <a href="<?= base_url('category/reset')?>" class="btn btn-info btn-sm"><i class="fas fa-eraser"></i></a>
                                    </div>
                                </div>
                            <?= 
                            form_close();
                            ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0; foreach($content as $row) : $no++;?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row->title ?></td>
                                    <td><?= $row->slug ?></td>
                                    <td>
                                        <a href="<?= base_url("category/edit/$row->id");?>">
                                            <i class="fas fa-edit text-info"></i>
                                        </a>
                                        <a href="<?= base_url("category/delete/$row->id");?>">
                                            <button class="btn btn-sm" type="submit" onclick="return confirm('Are you sure ?')"
                                                >
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </a>            
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <?= $pagination ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>