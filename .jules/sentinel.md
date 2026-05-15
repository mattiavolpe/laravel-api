## 2024-05-15 - Prevent IDOR in Controllers with Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) where users could access or modify `Project`, `Technology`, and `Type` models belonging to other users.
**Learning:** The application uses implicit route model binding in controllers (e.g., `/admin/projects/{project}`) but lacks centralized authorization checks (like Laravel Policies). This pattern meant that any authenticated user could guess an ID or slug and perform unauthorized actions on resources they didn't own.
**Prevention:** Explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) must be implemented in all `show`, `edit`, `update`, and `destroy` methods, using loose comparison.
