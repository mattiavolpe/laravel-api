## 2024-04-12 - Insecure Direct Object Reference in Resource Controllers
**Vulnerability:** Resource endpoints in `ProjectController`, `TypeController`, and `TechnologyController` used route model binding without implementing Laravel Policies or explicit controller checks, allowing users to view, edit, update, or delete other users' resources via IDOR.
**Learning:** This codebase frequently uses implicit route model binding for user-owned models (like `Type` and `Technology` which have `user_id` fields) without enforcing authorization checks.
**Prevention:** Always verify resource ownership using `if ($model->user_id != auth()->id()) abort(403);` in `show`, `edit`, `update`, and `destroy` methods when explicit policies are absent.
