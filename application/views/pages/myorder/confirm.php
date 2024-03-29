<main role="main" class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="list-group list-group-flush">
                       <?php $this->load->view('layouts/_menu');?>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Konfirmasi Order <?= $order->invoice;?>
                        <div class="float-right">
                        <?php $this->load->view('layouts/_status', ['status' => $order->status]);?>
                        </div>
                    </div>
                    <?= form_open_multipart($form_action, ['method' => 'POST']);?>
                        <?= 
                        form_hidden('id_orders', $order->id);
                        ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Transaksi</label>
                                <input type="text" class="form-control" value="<?= $order->invoice;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Dari rekening a/n</label>
                                <input type="text" name="account_name" class="form-control" value="<?= $input->account_name;?>">
                            </div>
                            <div class="form-group">
                                <label for="">No. Rekening</label>
                                <input type="text" name="account_number" class="form-control" value="<?= $input->account_number;?>">
                            </div>
                            <div class="form-group">
                                <label for="">Sebesar</label>
                                <input type="text" name="nominal" class="form-control" value="<?= $input->nominal;?>">
                            </div>
                            <div class="form-group">
                                <label for="">Catatan</label>
                                <textarea name="note" id="" cols="30" rows="5" class="form-control">-</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Bukti Transfer</label>
                                <input type="file" name="image" id="">
                                <?php if($this->session->flashdata('image_error')) : ?>
                                    <small class="form-text text-danger"><?= $this->session->flashdata('image_error');?></small>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>