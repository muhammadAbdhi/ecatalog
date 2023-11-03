<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .container-md {
            margin: 0 auto;
            max-width: 650px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    echo form_open('C_FormPendaftaran/save', 'id=myForm');
    ?>
    <div class="container-md mx-auto">
        <h2 class="text-center">Form Pendaftaran</h2>

        <div class="mb-3 row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'username', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'email', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'password', 'class' => 'form-control', 'type' => 'password']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="confirm" class="col-sm-3 col-form-label">Confirm Password</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'confirm', 'class' => 'form-control', 'type' => 'password']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="displayName" class="col-sm-3 col-form-label">Display Name</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'displayName', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'name', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="nickname" class="col-sm-3 col-form-label">Nickname</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'nickname', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="website" class="col-sm-3 col-form-label">Website</label>
            <div class="col-sm-9">
                <?php echo form_input(['name' => 'website', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="bio" class="col-sm-3 col-form-label">Bio</label>
            <div class="col-sm-9">
                <?php echo form_textarea(['name' => 'bio', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
            </div>
        </div>

    </div>

    <?php echo form_close(); ?>
</body>

</html>
