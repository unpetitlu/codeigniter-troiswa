<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <h3>Ajouter un post</h3>

                <?= $this->session->flashdata('success_insert_article'); ?>

                <?= /* form_open('post/add'); */ form_open_multipart('post/add') ?>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label for="titre">titre</label>
                                <input type="text" name="titre" value='<?php echo set_value("titre") ?>' class="form-control">
                                <?php echo form_error('titre','<div class="alert alert-danger">','</div>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label for="titre">titre</label>
                                <textarea name="description" class="form-control"><?php echo set_value("description") ?></textarea>
                                <?php echo form_error('description','<div class="alert alert-danger">','</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label for="titre">titre</label>
                                <input type="file" name="image">
                                <?php echo $this->upload->display_errors('<div class="alert alert-danger">','</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <?php
                                    $data = [
                                        'type' => 'submit',
                                        'content' => 'Valider',
                                        'class' => 'btn btn-primary'
                                    ];
                                    echo form_button($data);
                                ?>
                            </div>
                        </div>

                    </div>
                </form>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>