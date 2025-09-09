import api from "./client";

export const getAnalytics = async (filters = {}) => {
  const res = await api.get(`/productions/analytics`, { params: filters });
  return res.data;
};
