<?php

use yii\helpers\Html;

?>
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content container d-sm-flex">
        <div class="page-title">
            <h4><span class="font-weight-semibold">Profile</span></h4>
        </div>
        <div class="my-sm-auto ml-sm-auto mb-3 mb-sm-0">
            <?php if (isset($subscription)) {

                echo Html::a('Gestiona tu informacion de pago', ['/stripe/client-session'], ['class' => 'btn btn-primary w-100 w-sm-auto']);
            }
            ?>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content container">
    <div class="row">
        <!-- Basic card -->
        <div class="col-md-5 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Login information</h5>
                </div>

                <div class="card-body text-center">
                    <h6 class="font-weight-semibold">Username</h6>
                    <p class="mb-3"><?= Yii::$app->user->identity->username ?></p>

                    <h6 class="font-weight-semibold">Email</h6>
                    <p class="mb-3"><?= Yii::$app->user->identity->email ?></p>
                </div>
            </div>
        </div>
        <!-- /basic card -->
        <!-- subscription card-->
        <?php if (isset($subscription)) {
            echo '<div class="col-md-5 m-auto">';
            echo '<div class="card">';
            echo '<div class="card-header">';
            echo '<h5 class="card-title">Active subscription</h5>';
            echo '</div>';
            echo '<div class="card-body text-center">';
            echo '<h6 class="font-weight-semibold text-center">' . $subscription . '</h6>';
            echo HTMl::img('/img/' . $subscription . '.jpg', ['class' => 'card-img-top', 'style' => 'width: 220px; height: 120px;']);
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>


    <!-- Basic table -->
    <!--    <div class="card">-->
    <!--        <div class="card-header">-->
    <!--            <h5 class="card-title">Basic table</h5>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="card-body">-->
    <!--            Seed project includes the most basic components that can help you in development process - basic grid-->
    <!--            example, card, table and form layouts with standard components. Nothing extra. Easily turn on and off styles-->
    <!--            of different components in <code>_config.scss</code> file so that your CSS is always as clean as possible.-->
    <!--            Bootstrap components are always enabled though.-->
    <!--        </div>-->
    <!---->
    <!--        <div class="table-responsive">-->
    <!--            <table class="table">-->
    <!--                <thead>-->
    <!--                <tr>-->
    <!--                    <th>#</th>-->
    <!--                    <th>First Name</th>-->
    <!--                    <th>Last Name</th>-->
    <!--                    <th>Username</th>-->
    <!--                </tr>-->
    <!--                </thead>-->
    <!--                <tbody>-->
    <!--                <tr>-->
    <!--                    <td>1</td>-->
    <!--                    <td>Eugene</td>-->
    <!--                    <td>Kopyov</td>-->
    <!--                    <td>@Kopyov</td>-->
    <!--                </tr>-->
    <!--                <tr>-->
    <!--                    <td>2</td>-->
    <!--                    <td>Victoria</td>-->
    <!--                    <td>Baker</td>-->
    <!--                    <td>@Vicky</td>-->
    <!--                </tr>-->
    <!--                <tr>-->
    <!--                    <td>3</td>-->
    <!--                    <td>James</td>-->
    <!--                    <td>Alexander</td>-->
    <!--                    <td>@Alex</td>-->
    <!--                </tr>-->
    <!--                <tr>-->
    <!--                    <td>4</td>-->
    <!--                    <td>Franklin</td>-->
    <!--                    <td>Morrison</td>-->
    <!--                    <td>@Frank</td>-->
    <!--                </tr>-->
    <!--                </tbody>-->
    <!--            </table>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- /basic table -->


    <!-- Form layouts -->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-6">-->
    <!---->
    <!-- Horizontal form -->
    <!--            <div class="card">-->
    <!--                <div class="card-header header-elements-inline">-->
    <!--                    <h5 class="card-title">Horizontal form</h5>-->
    <!--                    <div class="header-elements">-->
    <!--                        <div class="list-icons">-->
    <!--                            <a class="list-icons-item" data-action="collapse"></a>-->
    <!--                            <a class="list-icons-item" data-action="reload"></a>-->
    <!--                            <a class="list-icons-item" data-action="remove"></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="collapse show">-->
    <!--                    <div class="card-body">-->
    <!--                        <form action="#">-->
    <!--                            <div class="form-group row">-->
    <!--                                <label class="col-lg-3 col-form-label">Text input</label>-->
    <!--                                <div class="col-lg-9">-->
    <!--                                    <input type="text" class="form-control">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="form-group row">-->
    <!--                                <label class="col-lg-3 col-form-label">Password</label>-->
    <!--                                <div class="col-lg-9">-->
    <!--                                    <input type="password" class="form-control">-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="form-group row">-->
    <!--                                <label class="col-lg-3 col-form-label">Select</label>-->
    <!--                                <div class="col-lg-9">-->
    <!--                                    <select name="select" class="custom-select">-->
    <!--                                        <option value="opt1">Basic select</option>-->
    <!--                                        <option value="opt2">Option 2</option>-->
    <!--                                        <option value="opt3">Option 3</option>-->
    <!--                                        <option value="opt4">Option 4</option>-->
    <!--                                        <option value="opt5">Option 5</option>-->
    <!--                                        <option value="opt6">Option 6</option>-->
    <!--                                        <option value="opt7">Option 7</option>-->
    <!--                                        <option value="opt8">Option 8</option>-->
    <!--                                    </select>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="form-group row">-->
    <!--                                <label class="col-lg-3 col-form-label">Textarea</label>-->
    <!--                                <div class="col-lg-9">-->
    <!--                                    <textarea rows="5" cols="5" class="form-control"-->
    <!--                                              placeholder="Default textarea"></textarea>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="text-right">-->
    <!--                                <button type="submit" class="btn btn-primary">Submit form <i-->
    <!--                                            class="icon-paperplane ml-2"></i></button>-->
    <!--                            </div>-->
    <!--                        </form>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!-- /horizotal form -->

    <!--        </div>-->
    <!---->
    <!--        <div class="col-lg-6">-->

    <!-- Vertical form -->
    <!--            <div class="card">-->
    <!--                <div class="card-header header-elements-inline">-->
    <!--                    <h5 class="card-title">Vertical form</h5>-->
    <!--                    <div class="header-elements">-->
    <!--                        <div class="list-icons">-->
    <!--                            <a class="list-icons-item" data-action="collapse"></a>-->
    <!--                            <a class="list-icons-item" data-action="reload"></a>-->
    <!--                            <a class="list-icons-item" data-action="remove"></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="collapse show">-->
    <!--                    <div class="card-body">-->
    <!--                        <form action="#">-->
    <!--                            <div class="form-group">-->
    <!--                                <label>Text input</label>-->
    <!--                                <input type="text" class="form-control">-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="form-group">-->
    <!--                                <label>Select</label>-->
    <!--                                <select name="select" class="custom-select">-->
    <!--                                    <option value="opt1">Basic select</option>-->
    <!--                                    <option value="opt2">Option 2</option>-->
    <!--                                    <option value="opt3">Option 3</option>-->
    <!--                                    <option value="opt4">Option 4</option>-->
    <!--                                    <option value="opt5">Option 5</option>-->
    <!--                                    <option value="opt6">Option 6</option>-->
    <!--                                    <option value="opt7">Option 7</option>-->
    <!--                                    <option value="opt8">Option 8</option>-->
    <!--                                </select>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="form-group">-->
    <!--                                <label>Textarea</label>-->
    <!--                                <textarea rows="4" cols="4" class="form-control"-->
    <!--                                          placeholder="Default textarea"></textarea>-->
    <!--                            </div>-->
    <!---->
    <!--                            <div class="text-right">-->
    <!--                                <button type="submit" class="btn btn-primary">Submit form <i-->
    <!--                                            class="icon-paperplane ml-2"></i></button>-->
    <!--                            </div>-->
    <!--                        </form>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!-- /vertical form -->
    <!---->
    <!--        </div>-->
    <!--    </div>-->
    <!-- /form layouts -->

</div>
<!-- /content area -->


