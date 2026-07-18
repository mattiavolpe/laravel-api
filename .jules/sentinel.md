## 2024-07-18 - Fix IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources (show, edit, update, destroy).
**Learning:** Implicit route model binding in Laravel fetches the model, but does not check ownership unless a Policy or explicit controller check is used. Users could access, modify, or delete projects belonging to other users.
**Prevention:** Always implement explicit authorization checks (e.g., `$model->user_id == auth()->id()`) or use Laravel Policies when returning resources scoped to a specific user.
