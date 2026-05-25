## 2024-05-25 - IDOR in Route Model Binding
**Vulnerability:** IDOR in ProjectController where users could access or modify other users' projects by modifying the ID in the URL.
**Learning:** The application uses implicit route model binding without implementing Laravel Policies. This architectural pattern bypasses authorization unless explicit ownership checks are added.
**Prevention:** Always implement explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) or use Laravel Policies when using route model binding for user-owned resources.