<?php
// views/login.php - Login form view
?>
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center py-4">
                <h4 class="mb-0"><i class="fas fa-bolt me-2"></i>EIM NC II Tracker</h4>
                <small>Student Progress Tracking System</small>
            </div>
            <div class="card-body p-4">
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endif; ?>
                
                <form method="post">
                    <input type="hidden" name="csrf_token" value="<?php echo e(csrf_token()); ?>">
                    
                    <div class="mb-3">
                        <label class="form-label"><i class="fas fa-envelope me-1"></i>Email</label>
                        <input type="email" class="form-control" name="email" required autofocus>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label"><i class="fas fa-lock me-1"></i>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center text-muted">
                <small>Default admin: admin@eim.local / admin123</small>
            </div>
        </div>
    </div>
</div>
