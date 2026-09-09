## 2024-05-23 - Prevent IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController` allowed any authenticated user to view, edit, update, or delete any other user's projects because route model binding does not verify ownership.
**Learning:** Implicit route model binding in Laravel controllers does not automatically check resource ownership. Shared controllers for user-specific resources need explicit authorization checks.
**Prevention:** Manually enforce explicit ownership checks (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) for user-specific resources.
