## 2024-07-13 - IDOR Vulnerability in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) vulnerabilities exist in controller endpoints (e.g., `ProjectController`) due to missing explicit ownership checks when using implicit route model binding.
**Learning:** Implicit route model binding in controllers without Laravel Policies can leave endpoints vulnerable to IDOR if explicit ownership checks are missing, particularly in applications where resource creation scopes to authenticated users but updates/deletions do not.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when dealing with user-owned resources via route model binding.
