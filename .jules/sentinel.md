## 2024-11-09 - Missing Ownership Checks on Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources
**Learning:** The codebase uses implicit route model binding for user-specific resources but does not enforce ownership validation, allowing authenticated users to access and modify projects they do not own by guessing the ID.
**Prevention:** Always manually enforce explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) on user-specific resources when using implicit model binding.
