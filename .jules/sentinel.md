## 2024-05-24 - Missing Authorization in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController methods due to lack of ownership checks after implicit route model binding.
**Learning:** Route model binding automatically retrieves models but does not inherently scope them to the authenticated user unless a Policy or explicit check is implemented.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies for controllers utilizing route model binding.
