<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="loginModalLabel">Login to your account.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/forum/partials/_handleLogin.php" method="post">
                    <div class="mb-3">
                        <label for="loginUname" class="form-label text-success">Username</label>
                        <input type="text" class="form-control" id="loginUname" name="loginUname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label text-success">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                        <div id="emailHelp" class="form-text">Forgot your login details?<a style="text-decoration:none;"class="text-success"> Get help signing in.</div>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>