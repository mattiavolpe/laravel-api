## 2024-05-23 - Fix IDOR in Project Controller
**Vulnerability:** IDOR vulnerability in implicit route model binding for projects.
**Learning:** Implicit route model binding in Laravel does not automatically enforce user ownership, making it possible to access other users' records by guessing IDs.
**Prevention:** Always manually verify ownership (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies for user-specific resources bound via route models.
