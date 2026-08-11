## 2024-05-18 - Missing Authorization (IDOR) in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `show`, `edit`, `update`, and `destroy` methods of `ProjectController`.
**Learning:** Implicit route model binding in Laravel fetches records by ID but does not automatically enforce user ownership.
**Prevention:** Implement explicit ownership checks (e.g., `if ($project->user_id != auth()->id()) abort(403);`) or use Laravel Policies when using implicit route model binding for user-owned resources.
