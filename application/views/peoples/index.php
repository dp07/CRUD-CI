<div class="container">
    <div class="row">
        <div class="col-md-10 mt-5">
        <h3>List Of Peoples</h3>
        <form action="" method="post">
        <div class="input-group mb-3 col-md-6 float-right">
            <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name="submit">Button</button>
            </div>
        </div>
        </form>
        <h5 class="mt-5">Results: <?= $total_row;  ?> </h5>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="4">
                <?php if(empty($peoples)) : ?>
                    <div class="alert alert-danger" role="alert">
                    data not found!!
                    </div>
                <?php endif; ?>
                </td>
            </tr>
           
            <?php foreach($peoples as $people) : ?>
                <tr>
                    <th><?= ++$start; ?></th>
                    <td><?= $people['name']; ?></td>
                    <td><?= $people['email']; ?></td>
                    <td>
                        <a href="" class="badge badge-warning">detail</a>
                        <a href="" class="badge badge-success">ubah</a>
                        <a href="" class="badge badge-danger">hapus</a>
                    </td>
                </tr>
                
            <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
