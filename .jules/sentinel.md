## 2025-02-14 - IDOR in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources allowing users to access, modify, or delete other users' projects.
**Learning:** Laravel's implicit route model binding resolves models by ID automatically but does not check ownership by default, leading to authorization bypasses if manual checks or policies are not applied.
**Prevention:** Always verify ownership manually (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies/FormRequests when dealing with user-specific resources bound via routes.
