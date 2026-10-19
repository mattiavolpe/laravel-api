## 2023-11-20 - [Fix IDOR in Project Controller]
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController. The methods `show`, `edit`, `update`, and `destroy` did not verify if the authenticated user owned the project being accessed.
**Learning:** The application uses implicit route model binding. While Laravel automatically retrieves the model based on the route parameter, it does not automatically enforce ownership boundaries unless specifically instructed via policies or explicit manual checks.
**Prevention:** Always verify object ownership (e.g., `if ($project->user_id != auth()->id()) abort(403);`) or use Laravel Policies when accessing user-specific resources via route model binding.
