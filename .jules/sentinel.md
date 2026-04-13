## 2024-03-01 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to implicit route model binding in controllers without authorization checks.
**Learning:** Laravel's route model binding automatically retrieves the model based on the route parameter, but it does not perform authorization. If controllers use these implicitly bound models without explicit ownership checks or Policies, users can access, modify, or delete resources belonging to other users by manipulating the ID/slug in the URL.
**Prevention:** Always implement explicit ownership checks (e.g., `$model->user_id == auth()->id()`) or use Laravel Policies/Gates for any controller method handling implicitly bound models that belong to specific users.
