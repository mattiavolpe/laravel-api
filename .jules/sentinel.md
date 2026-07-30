## 2024-07-30 - Fix IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed any authenticated user to view, edit, update, or destroy projects belonging to other users.
**Learning:** The application uses implicit route model binding in controllers without implementing Laravel Policies. This allows attackers to access other users' resources by guessing or enumerating IDs in the URL.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or implement Laravel Policies to ensure users can only access their own resources.
