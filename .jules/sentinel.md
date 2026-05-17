## 2024-05-24 - Missing Authorization in Laravel Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to missing ownership checks in controller methods utilizing implicit route model binding (e.g., `show`, `edit`, `update`, `destroy` in `ProjectController`, `TypeController`, `TechnologyController`).
**Learning:** The codebase relies on implicit route model binding without implementing Laravel Policies. This allows any authenticated user to view, edit, or delete entities belonging to other users by manipulating the ID or slug in the URL.
**Prevention:** Always implement authorization checks, either through Laravel Policies or explicitly in controller methods (e.g., `if ($model->user_id != auth()->id()) abort(403);`), when handling user-owned entities.
