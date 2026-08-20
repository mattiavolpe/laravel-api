## 2024-08-20 - Insecure Direct Object Reference in Route Model Binding
**Vulnerability:** IDOR in ProjectController methods (show, edit, update, destroy) allowed users to access and modify other users' projects.
**Learning:** The codebase utilizes implicit route model binding without implementing Laravel Policies, leading to missing authorization checks on resources.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or implement proper Laravel Policies when using route model binding for user-specific resources.
