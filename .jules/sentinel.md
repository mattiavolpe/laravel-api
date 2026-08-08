## 2024-05-23 - Prevent IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allowed authenticated users to access, edit, update, or delete other users' projects via route model binding.
**Learning:** Implicit route model binding in Laravel controllers does not enforce authorization or ownership checks by default, making the application susceptible to IDOR vulnerabilities unless explicit checks are implemented.
**Prevention:** Always manually enforce ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or implement Laravel Policies for resource methods handling user-specific data.
