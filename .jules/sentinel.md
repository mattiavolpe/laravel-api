## 2024-10-14 - Fix IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to missing ownership checks on implicit route model bindings in user-specific resources like ProjectController.
**Learning:** Laravel's route model binding resolves the model from the database but does not automatically authorize if the currently authenticated user owns the model, unless explicitly handled via Policies or manual checks.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);` or via explicit Policies) when accessing user-owned resources, and prefer `auth()->id()` to avoid 'Class Not Found' errors for facades.
