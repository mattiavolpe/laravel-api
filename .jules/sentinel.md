## 2024-07-28 - Implicit Route Model Binding IDOR Vulnerability
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController methods (show, edit, update, destroy) due to lack of authorization checks on route model binding.
**Learning:** Laravel's implicit route model binding automatically fetches records but does not verify ownership or enforce policies by default, making endpoints susceptible to unauthorized access and modification if users guess IDs.
**Prevention:** Always manually enforce ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) in controller methods, or implement and bind Laravel Policies, for all models that belong to users.
