## 2024-05-15 - Missing Authorization Checks in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources (show, edit, update, destroy methods) allowing users to access and modify other users' projects.
**Learning:** Implicit route model binding in Laravel controllers does not automatically check ownership. Without Laravel Policies or manual checks, any authenticated user can guess an ID (or slug) and access the resource.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning resources scoped to a specific user.
