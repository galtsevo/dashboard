<section class="content">
    <div class="container-fluid">
        <?php foreach ($items as $item): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                <?=$item['name'];?>
                            </h3>
                        </div>
                        <div class="card-body pad table-responsive">
                            <a href="<?php echo $controller; ?>/<?php echo $item['actionname']; ?>" class="btn btn-block btn-outline-primary">
                                Start
                            </a>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        <?php endforeach; ?>
        <!-- ./row -->
    </div><!-- /.container-fluid -->
</section>
