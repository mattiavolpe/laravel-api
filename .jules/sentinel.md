## 2023-10-26 - Prevent IDOR in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` via implicit route model binding, allowing any authenticated user to view, edit, or delete projects belonging to other users.
**Learning:** Laravel's route model binding retrieves models from the database globally by default if a Policy or explicit controller check is not implemented.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) in controller methods (like `show`, `edit`, `update`, `destroy`) when dealing with user-specific resources, or use Laravel Policies.
