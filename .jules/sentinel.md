## 2024-11-10 - Missing Ownership Authorization (IDOR) on Project Controller
**Vulnerability:** The `ProjectController` relies on implicit route model binding to fetch projects for routes (`show`, `edit`, `update`, `destroy`) but lacks explicit authorization checks to verify ownership.
**Learning:** Route model binding does not scope queries to the authenticated user by default. An authenticated user can bypass UI restrictions and manipulate parameters to access or modify resources owned by other users.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on instances retrieved via route model binding inside controllers, or use Laravel Policies for resource actions.
