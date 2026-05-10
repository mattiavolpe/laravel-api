## 2024-05-10 - Missing explicit ownership checks in Route Model Binding
**Vulnerability:** IDOR in controller CRUD operations via implicit model binding
**Learning:** Implicit route model binding resolves the model but does not verify ownership natively without explicit Policies or checks, making the app susceptible to IDOR.
**Prevention:** Always implement explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) or use Laravel Policies when returning user-owned models via implicit binding.
