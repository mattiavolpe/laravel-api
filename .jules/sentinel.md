## 2024-06-07 - Insecure Direct Object Reference in Implicit Route Model Binding
**Vulnerability:** The `ProjectController` relied on implicit route model binding without corresponding Laravel Policies or ownership checks, leading to IDOR.
**Learning:** Due to the absence of centralized Policies, bound models are fetched globally rather than scoped to the authenticated user.
**Prevention:** Manually verify object ownership (`if ($model->user_id != auth()->id()) abort(403);`) within each controller method that handles a specific model instance or implement Laravel Policies.
