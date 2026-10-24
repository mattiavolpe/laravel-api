## 2024-10-24 - Fix IDOR in Project Controller
**Vulnerability:** Missing ownership checks in controller methods using implicit route model binding.
**Learning:** Implicit route model binding automatically retrieves the record, but does not enforce ownership. This allows authenticated users to access other users' records by guessing the identifier (slug/ID), leading to IDOR.
**Prevention:** Always add an explicit authorization check (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or use Laravel Policies when using implicit route model binding on user-owned resources.
