<?php

/*

type: layout
content_type: static
name: Login
position: 2
is_default: true
description: Login layout

*/


?>
<?php include template_dir() . "header.php"; ?>

<script>
/*    $(document).ready(function () {
        $('.navigation-holder').addClass('not-transparent');
    })*/
</script>

<div class="xedit" rel="content" field="microweber-whitelabel_content">

    <section class="section p-t-200 p-b-200" style="background: #f6fafb;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Type your email address">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Type your password">
                    </div>

                    <div class="row m-t-30 m-b-30">
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#">Forgot password</a>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-default btn-md">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php include template_dir() . "footer.php"; ?>
