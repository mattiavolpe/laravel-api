## 2024-05-24 - Implicit Route Model Binding IDOR Risk
**Vulnerability:** IDOR vulnerability on ProjectController methods (show, edit, update, destroy) allowing users to modify/delete other users' projects.
**Learning:** Laravel's implicit route model binding automatically resolves model instances without inherently enforcing user ownership checks, necessitating explicit manual validation for resources intended only for their creator.
**Prevention:** Always explicitly check model ownership against the authenticated user (e.g., using `if ($model->user_id != auth()->id()) abort(403);`) on methods receiving an implicitly bound model.
