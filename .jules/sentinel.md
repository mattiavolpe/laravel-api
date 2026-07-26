## 2024-07-26 - IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources allowing any authenticated user to view, edit, or delete projects belonging to other users.
**Learning:** Implicit route model binding without Laravel Policies or manual ownership checks in the controller methods leaves endpoints vulnerable to unauthorized cross-user access.
**Prevention:** Always implement explicit ownership verification (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning resources scoped by `user_id`.
