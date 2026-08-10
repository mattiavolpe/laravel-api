## 2024-05-24 - Prevent IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, update, or delete projects belonging to other users.
**Learning:** Implicit route model binding in Laravel controllers does not automatically scope records to the currently authenticated user unless explicitly implemented using Policies or manual checks.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when accessing resources that belong to specific users.
