## 2024-05-24 - Missing Route Model Binding Authorization Checks
**Vulnerability:** IDOR in ProjectController where users could view, edit, update, or destroy projects belonging to other users via implicit route model binding (e.g., /admin/projects/{project}).
**Learning:** Implicit route model binding in Laravel fetches the model by ID/slug, but does not inherently scope the query to the authenticated user unless explicitly told to do so or handled via Policies/manual checks.
**Prevention:** Always implement authorization checks (e.g., if ($model->user_id != auth()->id()) abort(403);) or use Laravel Policies when returning user-specific resources via route model binding.
