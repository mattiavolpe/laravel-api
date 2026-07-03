## 2024-07-03 - Fix IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project management endpoints.
**Learning:** Implicit route model binding without Laravel Policies leaves endpoints vulnerable to unauthorized access and modification.
**Prevention:** Always ensure explicit ownership checks (e.g., using Policies or manual checks) are implemented for resources accessed via route model binding.