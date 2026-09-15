## 2024-05-24 - IDOR in Resource Controllers
**Vulnerability:** Insecure Direct Object Reference (IDOR) in `ProjectController`'s `show`, `edit`, `update`, and `destroy` methods allowing any user to access, modify, or delete any other user's projects.
**Learning:** Laravel's Route Model Binding automatically resolves the model based on the ID in the URL, but does not enforce ownership. It bypasses the user constraint set in the `index` method (`Auth::user()->projects()`).
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies/Gate in controller methods that use implicit route model binding.
