## 2024-06-18 - Prevent IDOR in ProjectController
**Vulnerability:** Any authenticated user could view, edit, update, or delete projects belonging to other users due to missing ownership checks.
**Learning:** Implicit route model binding in Laravel does not automatically enforce user authorization (like Policies do), meaning models are retrieved regardless of the `user_id`.
**Prevention:** Always manually verify model ownership (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or implement explicit Laravel Policies before allowing read/write operations on user-specific resources.
