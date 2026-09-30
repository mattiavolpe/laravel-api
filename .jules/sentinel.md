## 2024-05-24 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in ProjectController methods allows users to access others' projects.
**Learning:** Implicit route model binding retrieves the model, but doesn't automatically verify if it belongs to the authenticated user, bypassing authorization.
**Prevention:** Always implement explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) on user-specific resources or use Laravel's Authorization Policies.
