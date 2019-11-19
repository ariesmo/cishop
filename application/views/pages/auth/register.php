<main role="main" class="container">

    <?php $this->load->view('layouts/_alert');?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Formulir Registrasi
                    </div>
                    <div class="card-body">
                        <?= form_open('register', ['method' => 'POST']);?>
                            <div class="form-group">
                                <?= 
                                form_label('Nama');
                                ?>
                                <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]);?>
                                <?= form_error('name');?>
                            </div>
                            <div class="form-group">
                                <?= 
                                form_label('Email');
                                ?>
                                <?= form_input(['type' => 'email', 'name' => 'email'], $input->email, ['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan email aktif']);?>
                                <?= form_error('email');?>
                            </div>
                            <div class="form-group">
                                <?= 
                                form_label('Password');
                                ?>
                                <?= 
                                form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password minimal 8 karakter', 'required' => true]);
                                ?>
                                <?= form_error('password');?>
                            </div>
                            <div class="form-group">
                                <?= 
                                form_label('Konfirmasi Password');
                                ?>
                                <?= 
                                form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Password yang sama', 'required' => true]);  
                                ?>
                                <?= form_error('password_confirmation');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        <?= form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </main>