<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Formulir Login
                    </div>
                    <div class="card-body">
                        <?= form_open('login', ['method' => 'POST']);?>
                            <div class="form-group">
                                <?= form_label('Email');?>
                                <?= form_input(['type' => 'email', 'name' => 'email'], $input->email, ['class' => 'form-control', 'required' => true, 'placeholder' => 'Masukkan email']);?>
                                <?= form_error('email');?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Password');?>
                                <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]);?>
                                <?= form_error('password');?>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        <?= form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </main>