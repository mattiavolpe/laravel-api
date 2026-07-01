## 2024-07-01 - Missing Policies in Implicit Route Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources allowing any user to view, edit, update, or delete other users' projects via route model binding.
**Learning:** Laravel's implicit route model binding automatically resolves the model but does NOT automatically check authorization (like Policies). Controllers relying on this pattern without explicit `$model->user_id != auth()->id()` checks or Policies are vulnerable by default.
**Prevention:** Always implement explicit ownership checks (`!=` for loose type comparison) or Laravel Policies in controller methods that use implicit route binding to access user-specific resources.
