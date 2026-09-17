## 2024-09-17 - Missing Authorization Checks in Resource Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) where route model binding blindly passed records without checking if the authenticated user owned them.
**Learning:** Laravel's route model binding retrieves the model based on the ID in the URL, but doesn't automatically enforce ownership. Without explicit authorization, any authenticated user can view, edit, update, or delete other users' projects by guessing their IDs.
**Prevention:** Always add explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when returning resources tied to specific users in controllers.
