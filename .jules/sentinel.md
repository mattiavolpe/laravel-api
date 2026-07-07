## 2024-07-07 - Missing IDOR protection in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` allows users to view, edit, update, and delete projects belonging to other users.
**Learning:** Implicit route model binding retrieves the model without checking the `user_id` against the currently authenticated user.
**Prevention:** Always implement authorization checks (e.g., `if ($project->user_id != auth()->id()) abort(403);`) or use Laravel Policies when accessing resources tied to a specific user.
